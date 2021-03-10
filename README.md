# Objective
create a graphql server using laravel

# How to test ?

- ChromeiQL (Chrome)
- Altair (Firefox)  
# Commands used during dev
`composer create-project --prefer-dist laravel/laravel laravel-graph-lab`   
`composer require rebing/graphql-laravel`   
`php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"`     
   
You will need create Query (consult) using:   
`php artisan make:graphql:query UserQuery`   
This file will be created at app/GraphQL/Query/UserQuery.

Also types will be necessary using:   
`php artisan make:graphql:type UserType`
   
Then config that in graphQ (config folder), will be necessary create schemas and types.   
   

 