export default function auth ({ next, store }){
    if(!store.getters.['auth/check']){
        return next({
           name: 'UserLogin'
        })
    }
    return next()
}
