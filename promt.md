```php
Schema::create('animals', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('species_id');
    $table->integer('enclosure_id');
    $table->integer('activity_id');
    $table->date('date_of_birth');
    $table->string('gender');
    $table->float('weight');
    $table->string('health_status');
    $table->timestamps();
    
    $table->foreign('species_id')->references('id')->on('species')->onDelete('cascade');
    $table->foreign('enclosure_id')->references('id')->on('enclosures')->onDelete('cascade');
    $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');

});
```

```php
Schema::create('species', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('scientific_name');
    $table->string('habitat');
    $table->string('diet');
    $table->timestamps();
});
```

```php
Schema::create('enclosures', function (Blueprint $table) {
    $table->id();
    $table->integer('capacity');
    $table->string('location');
    $table->string('type');
    $table->timestamps();
});
```

```php
Schema::create('caretakers', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('specialty');
    $table->integer('years_of_experience');
    $table->string('contact_number');
    $table->timestamps();
});
```

```php
Schema::create('caretaker_animal', function (Blueprint $table) {
    $table->id();
    $table->integer('caretaker_id');
    $table->integer('animal_id');
    $table->timestamps();

    $table->foreign('caretaker_id')->references('id')->on('caretakers')->onDelete('cascade');
    $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');

});
```

```php
Schema::create('activities', function (Blueprint $table) {
    $table->id();
    $table->string('day');
    $table->string('time');
    $table->integer('duration');
    $table->string('description');
    $table->timestamps();
});
```
