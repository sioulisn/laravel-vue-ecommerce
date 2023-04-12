const state = {
    user: {
        token: sessionStorage.getItem('TOKEN'),
        data: {}
    },
    //define products state
    products: {
        loading: false,
        data: [],
    }
}

export default state
