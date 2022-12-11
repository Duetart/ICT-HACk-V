<?php
// apply HasTags trait to a model
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class NewsItem extends Model
{
    use HasTags;

    // create a model with some tags
$newsItem = NewsItem::create(['name' => 'The Article Title',
'tags' => ['first tag', 'second tag'], //tags will be created if they don't exist]);

// attaching tags
$newsItem->attachTag('third tag');
$newsItem->attachTag('third tag', 'some_type');
$newsItem->attachTags(['fourth tag', 'fifth tag']);
$newsItem->attachTags(['fourth_tag', 'fifth_tag'], 'some_type');

// detaching tags
$newsItem->detachTags('third tag');
$newsItem->detachTags('third tag', 'some_type');
$newsItem->detachTags(['fourth tag', 'fifth tag']);
$newsItem->detachTags(['fourth tag', 'fifth tag'], 'some_type');

// get all tags of a model
$newsItem->tags;

// syncing tags
$newsItem->syncTags(['first tag', 'second tag']); // all other tags on this model will be detached

// syncing tags with a type
$newsItem->syncTagsWithType(['category 1', 'category 2'], 'categories');
$newsItem->syncTagsWithType(['topic 1', 'topic 2'], 'topics');

// retrieving tags with a type
$newsItem->tagsWithType('categories');
$newsItem->tagsWithType('topics');

// retrieving models that have any of the given tags
NewsItem::withAnyTags(['first tag', 'second tag'])->get();

// retrieve models that have all of the given tags
NewsItem::withAllTags(['first tag', 'second tag'])->get();

// retrieve models that don't have any of the given tags
NewsItem::withoutTags(['first tag', 'second tag'])->get();

// translating a tag
$tag = Tag::findOrCreate('my tag');
$tag->setTranslation('name', 'fr', 'mon tag');
$tag->setTranslation('name', 'nl', 'mijn tag');
$tag->save();

// getting translations
$tag->translate('name'); //returns my name
$tag->translate('name', 'fr'); //returns mon tag (optional locale param)

// convenient translations through taggable models
$newsItem->tagsTranslated();// returns tags with slug_translated and name_translated properties
$newsItem->tagsTranslated('fr');// returns tags with slug_translated and name_translated properties set for specified locale

// using tag types
$tag = Tag::findOrCreate('tag 1', 'my type');

// tags have slugs
$tag = Tag::findOrCreate('yet another tag');
$tag->slug; //returns "yet-another-tag"

// tags are sortable
$tag = Tag::findOrCreate('my tag');
$tag->order_column; //returns 1
$tag2 = Tag::findOrCreate('another tag');
$tag2->order_column; //returns 2

// manipulating the order of tags
$tag->swapOrder($anotherTag);
}
