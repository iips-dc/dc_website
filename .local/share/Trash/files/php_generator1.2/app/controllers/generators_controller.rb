class GeneratorsController < ApplicationController
	#include GeneratorsHelper
	def index
		
	end
	def create
		@input_code = params[:input_code]
		#input = input_code(@user_input)
		#generate_php_code(input)
		redirect_to action: "show"
	end
	def show
		@input_code = params[:input_code]
		#send_file params[:input_code]
		respond_to do |format|
			format.html
			format.json
		end
	end
	def new
		
	end
	def form
		@name = params[:name]
		input_array = Array.new
		@output_array = Array.new
		@name.to_s.try(:split, "\n").each do |i|
			each_element = i.try(:split, /[<>\s]/)
			input_array.push each_element
		end
		input_array.each do |each_element|
			@output_array.push "<?php"
			@output_array.push "include(database_connect.php);"	
			if each_element.select{|type| type.match(/button=.*/)}
				@output_array.push "\tif(isset($_POST['submit'])){"
				break;
			end
		end
		counter = 0
		value_of_attribute = Array.new
		input_array.each do |each_element|
			name = each_element.select{|type| type.match(/name=.*/)}
			if name.length >= 1
				name = name.to_s
				name = name.slice(9 .. -5)
				if !(name .eql? "submit")
					value_of_attribute.push name
					@output_array.push "\t\t$#{name} = $_POST['#{name}'];"	
					counter = counter + 1
				else
				 	break
			 	end
			end
		end
		intial_query = "\t\tINSERT INTO `<database_name>`.`<table_name>`"
		no_of_attribute = "("
		for i in 0..counter-1
			if i < counter-1
				no_of_attribute= no_of_attribute + "`attribute_#{i+1}`, "	
			else
				no_of_attribute= no_of_attribute + "`attribute_#{i+1}`"
			end
			
		end
		no_of_attribute = no_of_attribute + ") "
		values_for_attributes = "VALUES("
		len= value_of_attribute.length
		for i in 0..len - 1
			if i < len - 1
				values_for_attributes = values_for_attributes + "'$#{value_of_attribute[i]}', "
			else
				values_for_attributes = values_for_attributes + "'$#{value_of_attribute[i]}'"
			end
		end
		values_for_attributes = values_for_attributes + ");"
		sql = intial_query + no_of_attribute + values_for_attributes
		if @name.to_s.length > 0
			@output_array.push sql.to_s
			@output_array.push "\t\tmysqli_query($dbconnect, $sql);"
			@output_array.push "\t}"
			@output_array.push "?>"
		end
	end
end
