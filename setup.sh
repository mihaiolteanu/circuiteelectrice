#!/bin/bash

# Generate all files in the org folder and move them outside afterwards.
# The files are only generated if the org files are newer than we already have
for orgfile in ./org/*.org; do
    # settings.org is used for inclusion in other to-be-generated org files.
    if [[ $orgfile == *"settings.org"* ]]; then
        continue
    fi

    # Don't regenerate files that are already up to date.
    htmlfile=${orgfile/\.org/\.html}
    if [[ public_html/`basename $htmlfile` -nt $orgfile ]]; then
        continue
    fi

    # Generate html file from org file
    emacs $orgfile --batch -f org-html-export-to-html

    # Generate pdf files
    pdffile=${htmlfile/\.html/\.pdf}
    wkhtmltopdf $htmlfile $pdffile
done

# Move all generated stuff to the place that matters.
rsync -r ./org/* --exclude '*.org' public_html/

# Cleanup.
rm ./org/*.html ./org/*.pdf

