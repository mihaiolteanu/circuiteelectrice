php_files=`find -name "*.php"`
for file in $php_files; do
    awk -f replace_img.awk $file > tmp && mv tmp $file
done


