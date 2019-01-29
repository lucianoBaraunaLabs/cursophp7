# Json

### json_decode($json, true);

`true` é utilizado para não virar um objeto

```

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true); // true é utilizado para não virar um objeto

var_dump($data);
```