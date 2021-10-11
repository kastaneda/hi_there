How to run it:

 - run `docker-compose up` (Ctrl-C to stop)
 - open <http://127.0.0.1:8888> in browser

P.S. How to make minimal favicon.ico:

```sh
convert -size 16x16 xc:red red.png
icotool -c -o favicon.ico red.png
```

Without favicon, every page reload will produce two hits to the 'app'.
