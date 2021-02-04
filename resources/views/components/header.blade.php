<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <h1>This is Header Component</h1>
   <br>
   <h2>Name is : {{$name}}</h2>
   <br>
   <h3>fruits Are :</h3>
   <ul>
       @foreach($fruits as $fruit)
        <li>{{$fruit}}</li>
        @endforeach
   </ul>
</div>