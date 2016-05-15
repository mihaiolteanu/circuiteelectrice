#!/bin/bash
# Take al chapter..
for chapter in *; do
    if [ -d $chapter ]; then
        cd $chapter
        # and for each subchapter excluding the "poze" folder..
        for subchapter in *; do
            if [ -d $subchapter ] && [ $subchapter != "poze" ]; then
                # raplace all php files with one org file with the same name as the subchapter.
                pandoc -r html $subchapter/*.php -o $subchapter/$subchapter.org
                rm $subchapter/*.php
            fi
        done
        # Get ready for the next chapter.
        cd ..
    fi
done

