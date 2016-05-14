# Sample input:
#   <img src="../poze/00001.png" alt="atracţie între două corpuri încărcate cu sarcină electrică"/>
# Sample output:
#   #+CAPTION: atracţie între două corpuri încărcate cu sarcină electrică
#   [[../poze/00001.png]]

BEGIN {
    # Split the input at "
    FS = "\""
}
# Replace all img tags with an org-mode equivalent.
/<img src/{
    print "#+CAPTION: " $4
    print "[["$2"]]"
}
# Leave the rest of the file intact.
!/<img src/

