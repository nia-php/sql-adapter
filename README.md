# nia - SQL Adapter

Collection of interfaces to use SQL databases using the nia framework. The interfaces allow you to separate your connection into a read and a write connection.

## Installation

Require this package with Composer.

```bash
composer require nia/sql-adapter
```

## How to use
You need a concrete implementation of your required SQL adapter engine to use this component. You will find an implementation of this component which is using PHP's PDO in the `nia/sql-adapter-sql` component.

