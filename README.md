# magento2-search-category
[![Commitizen friendly](https://img.shields.io/badge/commitizen-friendly-brightgreen.svg)](http://commitizen.github.io/cz-cli/)


### Installation
```
composer require 5stones/magento2-search-category:1.0.*
bin/magento module:enable --clear-static-content FiveStones_Catalog
bin/magento setup:upgrade
bin/magento setup:di:compile
```

### Purpose
Adds the ability to search categories via the same interface as products

### Example
Find all categories with url_key starting with an "a"

```
/V1/categories/search?
  searchCriteria[filterGroups][0][filters][0][field]=url_key&
  searchCriteria[filterGroups][0][filters][0][value]=a%25&
  searchCriteria[filterGroups][0][filters][0][conditionType]=like
```
