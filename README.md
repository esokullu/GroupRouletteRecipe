## GroupRoulette Recipe

This is a very simple recipe for Pho Networks.

There  is a single node:
1. **User**, an Actor

and two edges:
1. **Like**, a Subscribe 
2. **Message**, a Mention

### User Parameters

There are 6 mandatory fields and 2 optional ones (8 in total) with the User node:

```
    username: String! @unique @constraints(regex: "/^[_a-z0-9]{1,18}$/"),
    email: String!
    password: String! @md5 @constraints(regex: "/^[a-zA-Z0-9_]{4,12}$/"),
    birthday: Date @default(String: "01/15/1983"),
    about: String @constraints(maxLength: 255,) @default(String: ""),
    avatar: String @constraints(regex: "/^https?\\:\\/\\/.+?\\..+?\\/.+\\.((png)|(jpg)|(gif))$/i")
    is_premium: Boolean! @default(Boolean: false),
    join_time: Date! @now
 ```
