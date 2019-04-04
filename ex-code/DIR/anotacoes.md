# Manipulando arquivos

### in_array($foo, array('.', '..'))
Checa se um valor existe em um array. Ele retorna true ou false
- o primeiro argumento é o valor procurado
- o segundo são os valores de array que vc quer.

### Funções para aquivos:

- `is_dir($foo)` - checa se o diretório existe 
- `mkdir($foo)` - cria o diretório
- `rmdir($foo)` - remove o diretório
- `scandir('images')` - retorna informações sobre o diretório.
- `pathinfo($foo)` - retorna informação sobre o arquivo
- `filesize($foo)` - pega o tamanho do arquivo
- `filemtime($foo)` - pega a hora de última modificação do arquivo.