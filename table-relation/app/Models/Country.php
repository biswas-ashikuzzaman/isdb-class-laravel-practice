<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function articles()
    {
        return $this->hasManyThrough(
            Article::class, // ফাইনাল মডেল: Article
            Author::class,  // ইন্টারমিডিয়েট মডেল: Author
            'country_id',   // authors টেবিলে country_id ফরেন কী
            'author_id'     // articles টেবিলে author_id ফরেন কী
        );
    }
}
