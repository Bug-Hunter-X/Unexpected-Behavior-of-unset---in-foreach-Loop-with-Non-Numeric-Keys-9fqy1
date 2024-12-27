function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [foo] => foo [baz] => baz )
