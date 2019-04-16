# Download de arquivos.

### file_get_contents
Realiza o dowload de arquivos em forma binária. 
Onde `$foo` é a url do arquivo.

## parse_url(foo)
Pega conteúdo do arquivo e transforma em um array contendo as informações do aquivo.
```
array(3) {
  ["scheme"]=>
  string(5) "https"
  ["host"]=>
  string(14) "www.google.com"
  ["path"]=>
  string(60) "/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"
}
```
## basename($foo)
Pega o caminho base do arquivo.

```
$foo = "/images/branding/googlelogo/2x/

googlelogo_color_272x92dp.png"

basename($foo) // googlelogo_color_272x92dp.png

```