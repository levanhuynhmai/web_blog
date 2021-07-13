<?php

namespace App\Models;

use App\Traits\StatusTrait;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use willvincent\Rateable\Rateable;
use Astrotomic\Translatable\Translatable;

/**
 * Class Post
 * @package App\Models
 *
 * @method static active()
 */
class Post extends Model implements TranslatableContract
{
    use SoftDeletes;
    use Rateable;
    use StatusTrait;
    use Translatable;

    public $translatedAttributes = [
        'title',
        'summary',
        'detail',
        'slug',
        'seo_title',
        'seo_description'
    ];
    
    public const STATUS_ACTIVE = 1;
    public const STATUS_DISABLE = 2;
    public const STATUS_LIST = [
        self::STATUS_ACTIVE,
        self::STATUS_DISABLE,
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'web_posts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'image_id',
        'image_url',
        'status',
        'views',
        'tags',
        'is_hot',
        'deleted_at',
        'created_at',
        'updated_at',
        'creator_id',
        'editor_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }


    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    public static function dropDownStatus(): array
    {
        $data = self::STATUS_LIST;

        $html = [];
        foreach ($data as $value) {
            $html[$value] = trans('post.status.' . $value);
        }

        return $html;
    }

    public function getLinkAttribute(): string
    {
        $prefix = $this->category->slug ?? 'no-category';

        if (empty($this->slug)) {
            $this->slug = '1';
        }

        return base_url($prefix . '/' . $this->slug . '.html');
    }

    public static function image($item)
    {
        return null;
    }

    /**
     * text status.
     *
     * @return string
     */
    public function getStatusTextAttribute(): string
    {
        switch ($this->status) {
            case self::STATUS_DISABLE:
                $text = trans('post.status.disable');
                break;
            case self::STATUS_ACTIVE:
                $text = trans('post.status.active');
                break;
            default:
                $text = '--';
                break;
        }

        return $text;
    }

    /**
     * color status.
     *
     * @return string
     */
    public function getStatusColorAttribute(): string
    {
        switch ($this->status) {
            case self::STATUS_DISABLE:
                $text = 'danger';
                break;
            case self::STATUS_ACTIVE:
                $text = 'success';
                break;
            default:
                $text = 'default';
                break;
        }

        return $text;
    }

    public function getFullImageUrlAttribute(): string
    {
        if ($this->image_id > 0) {
            return asset('storage' . $this->image_url);
        } else {
            if (!empty($this->image_url)) {
                return $this->image_url;
            }
        }

        return asset('site/img/empty.svg');
    }
}
