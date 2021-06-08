# hiqdev/yii2-language

## [0.2.0] - 2020-11-26

- Fix require version constraints for composer v2
    - [38145f4] 2020-11-26 Fix require version constraints for composer v2 [@hiqsol]
    - [96aa8a0] 2020-10-02 Fix to use path instead of alias [@hiqsol]
- Added LanguageWasChanged event
    - [2f4e261] 2020-03-04 Added LanguageWasChanged event [@SilverFire]
- Added `language.languages` param
    - [913ea7b] 2019-06-19 Added `language.languages` param [@hiqsol]
- Other minor changes
    - [c4aec9d] 2019-03-03 Moved config to root dir [@hiqsol]
    - [0891848] 2018-07-23 Merge pull request #2 from tafid/apply_language_from_get_params [@SilverFire]
    - [9729c5a] 2018-07-20 Got language from GET params in Module::initLanguage() [@tafid]
    - [a6f8640] 2017-05-18 Fixed markup [@tafid]

## [0.1.0] - 2017-05-06

- Renamed configs: `hidev.yml` and `web` <- hisite
    - [af2b4ca] 2017-05-06 fixed tests [@hiqsol]
    - [c6da61b] 2017-05-06 csfixed [@hiqsol]
    - [8937df0] 2017-05-06 renamed config `web` <- hisite [@hiqsol]
    - [5ba5668] 2017-05-06 renamed `hidev.yml` [@hiqsol]
- Changed LanguageMenu to hide when no other languages
    - [f43212b] 2017-04-19 hidden LanguageMenu when no other languages [@hiqsol]
- Changed: redone with LanguageMenu menu (was widget)
    - [4129c4a] 2017-01-16 csfixed [@hiqsol]
    - [b7b8d8f] 2016-12-22 fixed dependencies in composer.json [@hiqsol]
    - [4e7bf59] 2016-12-22 redone yii2-thememanager -> yii2-menus [@hiqsol]
    - [9ff9657] 2016-12-21 used viewFile instead of view in LanguageMenu widget [@hiqsol]
    - [e7aa234] 2016-12-21 fixed LanguageMenu, both menu and widget [@hiqsol]
    - [b5fae65] 2016-12-21 added LanguageMenu implementing AbstractLanguageMenu [@hiqsol]

## [0.0.2] - 2016-12-06

- Changed container definitions settings
    - [f737c61] 2016-12-06 csfixed [@hiqsol]
    - [0b2b036] 2016-12-02 used proper container definitions setting [@hiqsol]
    - [33e88c4] 2016-11-16 redone themeManager widgets to DI definitions [@hiqsol]
- Fixed redirect loop at language selecting
    - [cb4d51a] 2016-10-27 + view parameter to LanguageMenu [@hiqsol]
    - [a268069] 2016-10-25 fixed redirect loop at language selecting [@hiqsol]

## [0.0.1] - 2016-10-24

- Fixed compatibility with `codemix/yii2-localeurls`
    - [6d1ed10] 2016-10-11 fixed language select url when `codemix/yii2-localeurls` used [@hiqsol]
    - [3cafffb] 2016-10-04 Added pathMap for widget find views [@tafid]
    - [9079f75] 2016-08-09 missing namespace error [@tafid]
    - [74e37f8] 2016-08-28 improved LanguageMenu widget [@hiqsol]
- Added default languages list
    - [8f6f83c] 2016-08-18 + default languages list [@hiqsol]
- Added empty tests
    - [69938f2] 2016-08-07 csfixed [@hiqsol]
    - [847c668] 2016-08-07 inited empty tests [@hiqsol]
- Added basics
    - [e703e1d] 2016-08-18 + hisite config [@hiqsol]
    - [6de04a1] 2016-08-10 added and used GetModuleTrait [@hiqsol]
    - [3c287ce] 2016-08-10 fixed typo [@hiqsol]
    - [8b29074] 2016-08-07 added Usage to readme [@hiqsol]
    - [de6273f] 2016-08-07 csfixed [@hiqsol]
    - [6f2f0be] 2016-08-06 fixed getting the module, tested to work [@hiqsol]
    - [66ed44e] 2016-08-07 added LanguageMenu view [@hiqsol]
    - [fe0fca1] 2016-08-06 added real code, not tested [@hiqsol]
    - [50e2e0b] 2016-08-05 inited [@hiqsol]

## [Development started] - 2016-08-05

## [dev] - 2017-05-06

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[69938f2]: https://github.com/hiqdev/yii2-language/commit/69938f2
[847c668]: https://github.com/hiqdev/yii2-language/commit/847c668
[8b29074]: https://github.com/hiqdev/yii2-language/commit/8b29074
[6d1ed10]: https://github.com/hiqdev/yii2-language/commit/6d1ed10
[3cafffb]: https://github.com/hiqdev/yii2-language/commit/3cafffb
[9079f75]: https://github.com/hiqdev/yii2-language/commit/9079f75
[74e37f8]: https://github.com/hiqdev/yii2-language/commit/74e37f8
[8f6f83c]: https://github.com/hiqdev/yii2-language/commit/8f6f83c
[e703e1d]: https://github.com/hiqdev/yii2-language/commit/e703e1d
[6de04a1]: https://github.com/hiqdev/yii2-language/commit/6de04a1
[3c287ce]: https://github.com/hiqdev/yii2-language/commit/3c287ce
[de6273f]: https://github.com/hiqdev/yii2-language/commit/de6273f
[6f2f0be]: https://github.com/hiqdev/yii2-language/commit/6f2f0be
[66ed44e]: https://github.com/hiqdev/yii2-language/commit/66ed44e
[fe0fca1]: https://github.com/hiqdev/yii2-language/commit/fe0fca1
[50e2e0b]: https://github.com/hiqdev/yii2-language/commit/50e2e0b
[f737c61]: https://github.com/hiqdev/yii2-language/commit/f737c61
[0b2b036]: https://github.com/hiqdev/yii2-language/commit/0b2b036
[33e88c4]: https://github.com/hiqdev/yii2-language/commit/33e88c4
[cb4d51a]: https://github.com/hiqdev/yii2-language/commit/cb4d51a
[a268069]: https://github.com/hiqdev/yii2-language/commit/a268069
[4129c4a]: https://github.com/hiqdev/yii2-language/commit/4129c4a
[b7b8d8f]: https://github.com/hiqdev/yii2-language/commit/b7b8d8f
[4e7bf59]: https://github.com/hiqdev/yii2-language/commit/4e7bf59
[9ff9657]: https://github.com/hiqdev/yii2-language/commit/9ff9657
[e7aa234]: https://github.com/hiqdev/yii2-language/commit/e7aa234
[b5fae65]: https://github.com/hiqdev/yii2-language/commit/b5fae65
[Under development]: https://github.com/hiqdev/yii2-language/compare/0.1.0...HEAD
[0.0.2]: https://github.com/hiqdev/yii2-language/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/hiqdev/yii2-language/releases/tag/0.0.1
[c6da61b]: https://github.com/hiqdev/yii2-language/commit/c6da61b
[8937df0]: https://github.com/hiqdev/yii2-language/commit/8937df0
[5ba5668]: https://github.com/hiqdev/yii2-language/commit/5ba5668
[f43212b]: https://github.com/hiqdev/yii2-language/commit/f43212b
[af2b4ca]: https://github.com/hiqdev/yii2-language/commit/af2b4ca
[0.1.0]: https://github.com/hiqdev/yii2-language/compare/0.0.2...0.1.0
[Development started]: https://github.com/hiqdev/yii2-language/compare/dev...Development started
[38145f4]: https://github.com/hiqdev/yii2-language/commit/38145f4
[96aa8a0]: https://github.com/hiqdev/yii2-language/commit/96aa8a0
[2f4e261]: https://github.com/hiqdev/yii2-language/commit/2f4e261
[913ea7b]: https://github.com/hiqdev/yii2-language/commit/913ea7b
[c4aec9d]: https://github.com/hiqdev/yii2-language/commit/c4aec9d
[0891848]: https://github.com/hiqdev/yii2-language/commit/0891848
[9729c5a]: https://github.com/hiqdev/yii2-language/commit/9729c5a
[a6f8640]: https://github.com/hiqdev/yii2-language/commit/a6f8640
[0.2.0]: https://github.com/hiqdev/yii2-language/compare/0.1.0...0.2.0
