#!/bin/zsh

# Get all folders of interest.
for title in [1-6]*; do
    title_file=$title # used for the file name
    # Remove the number
    title=${title//[1-6]_}
    # Replace underscores with spaces
    title=${title:gs/_/ }

    cd $title_file
    # Add all .org file contents to the new file
    for file in *.org; do
        file_orig=$file
        file=${file//[0-9][0-9]_}  # Remove chapter number.
        file=${file//.org}         # Remove file extension.
        file=${file:gs/_/ }        # Make title header from file name.
        echo "* $file\n" >> ../$title_file.org
        cat $file_orig >> ../$title_file.org
    done
    cd ..
done
