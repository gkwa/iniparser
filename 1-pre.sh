cp licenses.ini.orig licenses.ini
cat licenses.ini \
    | tr -d \( \
    | tr -d \)  \
    | tr -d \!  \
    > licenses.ini.tmp
rm licenses.ini
mv licenses.ini.tmp licenses.ini