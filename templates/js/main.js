export default {
    data() {
        return {
            count: 0 ,
            posts:[],
            detail:[],
            showDetail:false,
            category:[]
        }
    },

    mounted()
    {
        this.getPostsFetch()
        this.getCategoryFetch()
    },

    methods:{
        async getPostsFetch()
        {
           let req = await fetch('/api/posts.php');
           let res = await req.json()
            this.posts =  JSON.parse(JSON.stringify(res))

        },
        async getCategoryFetch()
        {
            let req = await  fetch('/api/category.php')
            let res = await  req.json()
            this.category = JSON.parse(JSON.stringify(res))
        },
        show(id)
        {
            let post = JSON.parse(JSON.stringify(this.posts))
            let detail = post.filter((item)=>item.id == id)
            if (detail.length > 0){
                this.detail = detail
                this.showDetail = true
            }
        }
    },

    computed:{
      getDetail()
      {
          return  this.detail[0].content
      },

    },
    template: `
         <div class="container mt-2 d-flex"> 
            <div class="col-md-3">
               <ul class="list-group">
<!--               bg-primary -->
                    <li  v-for="item in category" class="list-group-item"> {{item.title}}</li>
                </ul>
            </div>
            
             <div class="col-md-9 d-flex flex-wrap">
                 <div class="col-md-4 "  v-for="item in posts ">
                 <div class="card">
                      <div class="card-body">
                        <h4 class="card-title"> {{item.title}}</h4>
                        <p class="card-text">
                          {{item.preview}}
                        </p>
                        <a  @click="show(item.id)" class="btn btn-primary"> read </a>
                      </div>
                    </div>
                 </div>
            </div>
        </div>
        
        <div class="container mt-5" v-if="showDetail"> 
        
             <div class="col-md-12 d-flex">
                 {{getDetail}}
            </div>
        </div>
    `
}