<h1>Arrays</h1>


<p>
    is a primitive type
</p>

<p>Two syntaxs to create in php</p>
<ul>
    <li>$array = [];</li>
    <li>$array = array();</li>
</ul>


<h3>Create with data</h3>

<pre>
    $array = [0, 1, 2, 3]; //index based

    OR

    $array = [
        'key' => $value,
        'key2; => $value2
    ]; //key based

</pre>

<h3>Add to the end of array</h3>

<pre>
    array_push()

    OR

    $array[] = $var;
</pre>

<h3>Add to a particular key of an array</h3>

<pre>
    $array['key'] = 'newValue';
</pre>


<h3>Accessing array values by key</h3>
<pre>
    $items = [
        'keyName' => $value,
        'anotherKey => $anotherValue,
    ];

    dump($item['anotherKey']); //should print the value of $anotherValue
</pre>


<h3>Looping through arrays</h3>

<h4>Foreach</h4>

<pre>
    foreach( $items as $item )
    {
        dump($item);
    }
</pre>

<h4>Foreach with keys</h4>

<pre>
    foreach( $items as $key => $itemValue )
    {
        dump($key);
        dump($itemValue);
    }
</pre>


<h4>For</h4>

<pre>
    for( $i = 0; $i < count($items); $i++ )
    {
        dump($items[$i]);
    }
</pre>

<h1>Laracast Examples</h1>
<?php
$animals = ['dog','cat','cow','horse'];
$newAnimal = 'elephant';

$animals[] = $newAnimal;

?>
@foreach ($animals as $animal)
    <ul>
        <li>{{ $animal }} ,</li>
    </ul>
@endforeach

<?php
$animalAssoc = [
    'type' => 'dog',
    'name' => 'meaow',
    'colour'=> 'purple'
];
$animalAssoc['food'] = 'tuna'

?>


@foreach($animalAssoc as $key => $property)
   <ul>
        <li>{{$key}} : {{$property}}</li>
    </ul>
@endforeach
