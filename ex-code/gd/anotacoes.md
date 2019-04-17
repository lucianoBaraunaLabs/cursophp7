# Criando imagens com o PHP

O php já vem com a biblioteca GD que é responsável pela criação de iamgens.

Para criarmos nós precisamos definir primeiro definir cabeçalho do nosso arquivo PHP.
Que é ele que diz o tipo do arquivo que vai ser gerado.

Fazemos isso da seguinte forma:
```
header("Content-Type: image/png"); 
```

### Funções GD
**os parâmetros são muitos. Para ver em detalhe veja a documentação.**
- `imagecreate(256, 256)` - Cria a imagem já com um tamanho. Os tamanhos não precisam
de ter o `px` decalarado.
- `imagecolorallocate()` - Cria uma cor na imagem
- `imagestring();` - Cria um texto na imagem
- `imagepng, imagejpeg` - Gera o tipo de arquivo é a imagem.
- `imagedestroy` - Destroi a imagem. Para não ficar alocada em memória no PHP
- `imagettftext` - Escreve o texto na imagem utilizando fontes customizadas.
- `imagecopyresampled` - Redmensiona e cria imagens novas ex: thumbnails
