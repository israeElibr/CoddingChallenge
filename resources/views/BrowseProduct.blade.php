@include('Boot' ,['title' => 'Browse Product'])
    <div class="container-fluid ml-5 mt-5  ">
        <div>
            <div class=" mt-5 ">
                <h4 class="text-center  pt-4 " > Products</h4>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
             
            
            <div class="content-scroller ds col-md-9">
                    <div class="container mt-2 table-sm ">
                        <Table class="table text-center  div-shadow-tab table-hover table-width" id="mytable" id="small-size">
                            @foreach ($categories as $item)  
                              <thead class="thead">
                                  <tr>
                                      <th>Name</th>
                                      <th>Description </th>
                                      <th>Price</th>
                                      <th>Image</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                       <td>{{ $item['name'] }}</td>
                                       <td>{{$item['description']}}</td>
                                       <td>{{$item['price']}}</td>
                                       <td><img src="{{ asset('storage/' . $item['image']) }}" ></td>   
                                  </tr>
                              </tbody>
                            @endforeach
                        </table>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                        
                    </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        





       