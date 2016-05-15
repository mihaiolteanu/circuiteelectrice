#!/bin/bash

for chapter in *; do
    if [ -d $chapter ]; then
        cd $chapter
        for subchapter in *; do
            if [ -d $subchapter ] && [ $subchapter != "poze" ]; then
                mv $subchapter/*.org .
                rm -rf $subchapter
            fi
        done
        # Get ready for the next chapter.
        cd ..
    fi
done

