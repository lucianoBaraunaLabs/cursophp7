# Curl
É uma biblioteca que ajuda o seu código a criar uma conexão entre api e urls externas. 

### curl_init($link); 

Inicia a biblioteca curl

### curl_setopt($foo, $bar, $zoo)

Passamos as configurações iniciais para o curl. Onde:
`$foo` - É a url
`$bar` - Opções
`$zoo` - Booleando que dizemos se queremos ou não elas com o booleano

Algumas opções: 
- `CURLOPT_RETURNTRANSFER` - Estamos dizendo que esperamos uma respotas da url setada
- `CURLOPT_SSL_VERIFYPEER` - esperamos um conexão segura pelo SSL

Obs:. Ao setar `CURLOPT_SSL_VERIFYPEER` precisamos colocar uma série
de outras configurações por conta do certificado ssl. Para não termos
esse trabalho caso não seja necessário. Nós simplesmente precisamos
passar como `0` no pŕoximo argumento

### curl_exe($foo)
Executamos a conexão passando a configuração.

### curl_close($foo)
Fechamos a conexão.