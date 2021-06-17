<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Sushi\Sushi;

final class IconSet extends Model
{
    use Sushi;

    public $timestamps = false;

    protected $guarded = [];

    protected array $rows = [
        [
            'id' => 1,
            'name' => 'heroicons',
            'repository' => 'https://github.com/blade-ui-kit/blade-heroicons',
            'composer' => 'blade-ui-kit/blade-heroicons',
            'ignore_rule' => '/^(?:o|s)-/',
            'outline_rule' => '/^o-/',
            'custom_css' => '',
        ],
        [
            'id' => 2,
            'name' => 'zondicons',
            'repository' => 'https://github.com/blade-ui-kit/blade-zondicons',
            'composer' => 'blade-ui-kit/blade-zondicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 3,
            'name' => 'bootstrap-icons',
            'repository' => 'https://github.com/davidhsianturi/blade-bootstrap-icons',
            'composer' => 'davidhsianturi/blade-bootstrap-icons',
            'ignore_rule' => '/-fill$/',
            'outline_rule' => '/.*(?<!-fill)$/',
            'custom_css' => '',
        ],
        [
            'id' => 4,
            'name' => 'css-icons',
            'repository' => 'https://github.com/khatabwedaa/blade-css-icons',
            'composer' => 'khatabwedaa/blade-css-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        // [
        //     'id' => 5,
        //     'name' => 'evaicons',
        //     'repository' => 'https://github.com/hasnayeen/blade-eva-icons',
        //     'composer' => 'hasnayeen/blade-eva-icons',
        //     'ignore_rule' => '/-outline$/',
        //     'outline_rule' => '/-outline$/',
        //     'custom_css' => '',
        // ],
        [
            'id' => 6,
            'name' => 'feather-icons',
            'repository' => 'https://github.com/brunocfalcao/blade-feather-icons',
            'composer' => 'brunocfalcao/blade-feather-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 7,
            'name' => 'fontawesome-brands',
            'repository' => 'https://github.com/owenvoke/blade-fontawesome',
            'composer' => 'owenvoke/blade-fontawesome',
            'ignore_rule' => null, //fab
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 8,
            'name' => 'fontawesome-regular',
            'repository' => 'https://github.com/owenvoke/blade-fontawesome',
            'composer' => 'owenvoke/blade-fontawesome',
            'ignore_rule' => null, //far
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 9,
            'name' => 'fontawesome-solid',
            'repository' => 'https://github.com/owenvoke/blade-fontawesome',
            'composer' => 'owenvoke/blade-fontawesome',
            'ignore_rule' => null, //fas
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 10,
            'name' => 'github-octicons',
            'repository' => 'https://github.com/Activisme-be/Blade-github-octicons',
            'composer' => 'actb/blade-github-octicons',
            'ignore_rule' => '/-\d{2}$/', // 16|24
            'outline_rule' => null,
            'custom_css' => '',
        ],
        // [
        //     'id' => 11,
        //     'name' => 'ionicons',
        //     'repository' => 'https://github.com/faisal50x/blade-ionicons',
        //     'composer' => 'faisal50x/blade-ionicons',
        //     'ignore_rule' => '/-(?:outline|sharp)$/',
        //     'outline_rule' => '/-outline$/',
        //     'custom_css' => '',
        // ],
        [
            'id' => 13,
            'name' => 'remix',
            'repository' => 'https://github.com/andreiio/blade-remix-icon',
            'composer' => 'andreiio/blade-remix-icon',
            'ignore_rule' => '/-(?:line|fill)$/',
            'outline_rule' => '/-line$/',
            'custom_css' => '',
        ],
        [
            'id' => 14,
            'name' => 'tabler',
            'repository' => 'https://github.com/ryangjchandler/blade-tabler-icons',
            'composer' => 'ryangjchandler/blade-tabler-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 15,
            'name' => 'entypo',
            'repository' => 'https://github.com/owenvoke/blade-entypo',
            'composer' => 'owenvoke/blade-entypo',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 16,
            'name' => 'boxicons-regular',
            'repository' => 'https://github.com/mallardduck/blade-boxicons',
            'composer' => 'mallardduck/blade-boxicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 17,
            'name' => 'boxicons-solid',
            'repository' => 'https://github.com/mallardduck/blade-boxicons',
            'composer' => 'mallardduck/blade-boxicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 18,
            'name' => 'boxicons-logos',
            'repository' => 'https://github.com/mallardduck/blade-boxicons',
            'composer' => 'mallardduck/blade-boxicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 19,
            'name' => 'simple-icons',
            'repository' => 'https://github.com/codeat3/blade-simple-icons',
            'composer' => 'codeat3/blade-simple-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 20,
            'name' => 'google-material-design-icons',
            'repository' => 'https://github.com/codeat3/blade-google-material-design-icons',
            'composer' => 'codeat3/blade-google-material-design-icons',
            'ignore_rule' => null,
            'outline_rule' => '/-o$/',
            'custom_css' => '',
        ],
        [
            'id' => 21,
            'name' => 'vscode-codicons',
            'repository' => 'https://github.com/codeat3/blade-codicons',
            'composer' => 'codeat3/blade-codicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 22,
            'name' => 'cryptocurrency-icons',
            'repository' => 'https://github.com/codeat3/blade-cryptocurrency-icons',
            'composer' => 'codeat3/blade-cryptocurrency-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 23,
            'name' => 'eos-icons',
            'repository' => 'https://github.com/codeat3/blade-eos-icons',
            'composer' => 'codeat3/blade-eos-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 24,
            'name' => 'evil-icons',
            'repository' => 'https://github.com/codeat3/blade-evil-icons',
            'composer' => 'codeat3/blade-evil-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 25,
            'name' => 'file-icons',
            'repository' => 'https://github.com/codeat3/blade-file-icons',
            'composer' => 'codeat3/blade-file-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 26,
            'name' => 'font-audio',
            'repository' => 'https://github.com/codeat3/blade-fontaudio',
            'composer' => 'codeat3/blade-fontaudio',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 27,
            'name' => 'weather-icons',
            'repository' => 'https://github.com/codeat3/blade-weather-icons',
            'composer' => 'codeat3/blade-weather-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 28,
            'name' => 'vaadin-icons',
            'repository' => 'https://github.com/codeat3/blade-vaadin-icons',
            'composer' => 'codeat3/blade-vaadin-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 29,
            'name' => 'unicons',
            'repository' => 'https://github.com/codeat3/blade-unicons',
            'composer' => 'codeat3/blade-unicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 30,
            'name' => 'typicons',
            'repository' => 'https://github.com/codeat3/blade-typicons',
            'composer' => 'codeat3/blade-typicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 31,
            'name' => 'teeny-icons',
            'repository' => 'https://github.com/codeat3/blade-teeny-icons',
            'composer' => 'codeat3/blade-teeny-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 32,
            'name' => 'system-uicons',
            'repository' => 'https://github.com/codeat3/blade-system-uicons',
            'composer' => 'codeat3/blade-system-uicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 33,
            'name' => 'rpg-awesome-icons',
            'repository' => 'https://github.com/codeat3/blade-rpg-awesome-icons',
            'composer' => 'codeat3/blade-rpg-awesome-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 34,
            'name' => 'radix-icons',
            'repository' => 'https://github.com/codeat3/blade-radix-icons',
            'composer' => 'codeat3/blade-radix-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 35,
            'name' => 'pixelarticons',
            'repository' => 'https://github.com/codeat3/blade-pixelarticons',
            'composer' => 'codeat3/blade-pixelarticons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 36,
            'name' => 'phosphor-icons',
            'repository' => 'https://github.com/codeat3/blade-phosphor-icons',
            'composer' => 'codeat3/blade-phosphor-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 37,
            'name' => 'microns',
            'repository' => 'https://github.com/codeat3/blade-microns',
            'composer' => 'codeat3/blade-microns',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 38,
            'name' => 'jam-icons',
            'repository' => 'https://github.com/codeat3/blade-jam-icons',
            'composer' => 'codeat3/blade-jam-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 39,
            'name' => 'ikonate',
            'repository' => 'https://github.com/codeat3/blade-ikonate',
            'composer' => 'codeat3/blade-ikonate',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 40,
            'name' => 'iconoir',
            'repository' => 'https://github.com/andreiio/blade-iconoir',
            'composer' => 'andreiio/blade-iconoir',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 41,
            'name' => 'iconic',
            'repository' => 'https://github.com/itsmalikjones/blade-iconic',
            'composer' => 'itsmalikjones/blade-iconic',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 42,
            'name' => 'icomoon',
            'repository' => 'https://github.com/nerdroid23/blade-icomoon',
            'composer' => 'nerdroid23/blade-icomoon',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 43,
            'name' => 'fluentui-system-icons',
            'repository' => 'https://github.com/codeat3/blade-fluentui-system-icons',
            'composer' => 'codeat3/blade-fluentui-system-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 44,
            'name' => 'forkawesome',
            'repository' => 'https://github.com/codeat3/blade-forkawesome',
            'composer' => 'codeat3/blade-forkawesome',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 45,
            'name' => 'line-awesome-icons',
            'repository' => 'https://github.com/codeat3/blade-line-awesome-icons',
            'composer' => 'codeat3/blade-line-awesome-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 46,
            'name' => 'clarity',
            'repository' => 'https://github.com/codeat3/blade-clarity-icons',
            'composer' => 'codeat3/blade-clarity-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 47,
            'name' => 'iconpark',
            'repository' => 'https://github.com/codeat3/blade-iconpark',
            'composer' => 'codeat3/blade-iconpark',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 48,
            'name' => 'ant-design-icons',
            'repository' => 'https://github.com/codeat3/blade-ant-design-icons',
            'composer' => 'codeat3/blade-ant-design-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 49,
            'name' => 'majestic-icons',
            'repository' => 'https://github.com/codeat3/blade-majestic-icons',
            'composer' => 'codeat3/blade-majestic-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 50,
            'name' => 'akar-icons',
            'repository' => 'https://github.com/codeat3/blade-akar-icons',
            'composer' => 'codeat3/blade-akar-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 51,
            'name' => 'fontisto-icons',
            'repository' => 'https://github.com/codeat3/blade-fontisto-icons',
            'composer' => 'codeat3/blade-fontisto-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 52,
            'name' => 'bytesize-icons',
            'repository' => 'https://github.com/codeat3/blade-bytesize-icons',
            'composer' => 'codeat3/blade-bytesize-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 53,
            'name' => 'coolicons',
            'repository' => 'https://github.com/codeat3/blade-coolicons',
            'composer' => 'codeat3/blade-coolicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 54,
            'name' => 'simple-line-icons',
            'repository' => 'https://github.com/codeat3/blade-simple-line-icons',
            'composer' => 'codeat3/blade-simple-line-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 55,
            'name' => 'mono-icons',
            'repository' => 'https://github.com/codeat3/blade-mono-icons',
            'composer' => 'codeat3/blade-mono-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 56,
            'name' => 'gov-icons',
            'repository' => 'https://github.com/codeat3/blade-govicons',
            'composer' => 'codeat3/blade-govicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 57,
            'name' => 'uiw-icons',
            'repository' => 'https://github.com/codeat3/blade-uiw-icons',
            'composer' => 'codeat3/blade-uiw-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 58,
            'name' => 'pepicons',
            'repository' => 'https://github.com/codeat3/blade-pepicons',
            'composer' => 'codeat3/blade-pepicons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 59,
            'name' => 'game-icons',
            'repository' => 'https://github.com/codeat3/blade-game-icons',
            'composer' => 'codeat3/blade-game-icons',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => '',
        ],
        [
            'id' => 60,
            'name' => 'country-flags',
            'repository' => 'https://github.com/stijnvanouplines/blade-country-flags',
            'composer' => 'stijnvanouplines/blade-country-flags',
            'ignore_rule' => null,
            'outline_rule' => null,
            'custom_css' => 'shadow border',
        ],
    ];

    public function name(): string
    {
        return (string) Str::of($this->name)->replace('-', ' ')->title();
    }
}
