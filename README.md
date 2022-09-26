# Craft Storybook Example

An example of using [Craft CMS](https://craftcms.com) with [Storybook Server](https://www.npmjs.com/package/@storybook/server). Put together for the ["Crafting Components with Storybook" talk](https://craftcms.com/events/sessions/crafting-components-with-storybook) given at Dot All 2022. 

## Prepare

Before you try to run things, make sure you have all the initial boxes checked.

1. Run `npm install`
2. run `composer install`

You'll also need some kind of local PHP environment, I recommend [DDEV](https://ddev.com). If you have that, you can just run `ddev start` to get things running. Be sure to import the seed database as well with `ddev import-db -f ./seed.sql`. After seeding the database, add your user with `ddev craft users/create --admin`. 

## Storybook

1. Start BrowserSync with `npm run sync`
2. In a separate terminal start your storybook with `npm run storybook`
