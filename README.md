# ci-spreadsheet #

A Code Igniter Wrapper for the PHPSpreadSheet Library @ https://github.com/PHPOffice/phpspreadsheet

Base Library Version @ v1.130

## Installation ##

To install, download and install Splint from <https://splint.cynobit.com/downloads/splint> and then run the below from your Code Igniter project root

```bash
splint install francis94c/ci-spreadsheet
```

## Loading ##

```php
$this->load->package('francis94c/ci-spreadsheet');
```

## Create SpreadSheet Object ##

```php
$spreadsheet = $this->xlsx->spreadsheet();
```

## Get Xlsx Writer Object ##

```php
$writer = $this->xlsx->xlsxWriter($spreadsheet);
```
