@extends('user.layout.main')

@section('title')
<title>Trang chủ</title>
@endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/user/page/home-rp.css">
@endsection

@section('content')
<div class="index">
  <div class="for-megadom">
    <div class="container main-container for-megadom-container">
      <div class="info">
        <p class="text-small">Bạn đang tìm giải pháp làm to dương vật?</p>
        <p class="text-big"><span class="fw-bold">MEGADOM</span><br>CÓ THỂ GIÚP BẠN</p>
        <div class="show-more">
          <p>TÌM HIỂU THÊM VỀ QUÁ TRÌNH PHẪU THUẬT</p>
          <img src="/frontend/images/vector.png">
        </div>
      </div>
      <div class="logo">
        <img id="image-1" src="/frontend/images/logotienphong.png">
        <img id="image-2" src="/frontend/images/baodanviet.png">
        <img id="image-3" src="/frontend/images/baoeva.png">
        <img id="image-4" src="/frontend/images/logobao24h.png">
        <img id="image-5" src="/frontend/images/logobaogiadinh.png">
        <img id="image-6" src="/frontend/images/logovtvcab.png">
      </div>
    </div>
  </div>
  {{-- <div class="answers">
    <img src="/frontend/images/rectangle68.png">
    <div class="text">
      <p class="text-small">MEGADOM</p>
      <p class="text-bold">Giải đáp</p>
    </div>
    <div class="media media-1">
      <img src="/frontend/images/rectangle70.png">
      <div><span>Megadom Giải đáp</span></div>
      <p class="title">BẠO DÂM BIẾN THÁI TÌNH DỤC HAY BỆNH LÝ</p>
    </div>
    <div class="media media-2">
      <img src="/frontend/images/rectangle70.png">
      <div><span>Megadom Giải đáp</span></div>
      <p class="title">NGUY CƠ KHI SỬ DỤNG DỤNG CỤ TÌNH DỤC</p>
    </div>
    <div class="media media-3">
      <img src="/frontend/images/rectangle70.png">
      <div><span>Megadom Giải đáp</span></div>
      <p class="title">CÁC PHƯƠNG PHÁP KÉO DÀI VÀ TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
    </div>
    <div class="show-full"><span>XEM TOÀN BỘ</span></div>
  </div>
  <div class="surgery">
    <div class="text-left">
      <p class="text-bold">PHẪU THUẬT TĂNG<span>KÍCH THƯỚC DƯƠNG VẬT</span></p>
      <hr>
      <p class="text-small">Phẫu thuật tăng kích thước dương vật ở Megadom không gây mê, không đau đớn và có thể duy trì kích thước dương vật lâu dài.</p>
      <div class="discover-more">
        <a class="explore-more">Khám phá thêm</a><span>|</span><a class="library">Thư viện</a>
      </div>
    </div>
    <div class="text-right">
      <p class="text-bold">PHẪU THUẬT<span>KÉO DÀI DƯƠNG VẬT</span></p>
      <hr>
      <p class="text-small">Lấy lại sự tự tin của bạn chỉ bằng phẫu thuật kéo dài dương vật. Duy nhất chúng tôi có thể làm dài tối đa dương vật của bạn.</p>
      <div class="discover-more">
        <a class="explore-more">Khám phá thêm</a><span></span><a class="library">Thư viện</a>
      </div>
    </div>
  </div>
  <div class="team">
    <img id="background" src="/frontend/images/rectangle73.png">
    <div class="image-doctor">
      <img src="/frontend/images/channels4_profile.png">
    </div>
    <p class="text-bold">ĐỘI NGŨ BÁC SĨ</p>
    <hr>
    <p class="text-small"><span>ThS.BS Nguyễn Văn Đức là một trong những bác sĩ tiết niệu thành công nhất tại Việt Nam. Anh đã cống hiến sự nghiệp chuyên môn của mình để giúp nam giới giải quyết nhiều vấn đề  về dương vật. Từ việc tăng kích cỡ dương vật đến các phương pháp điều trị dị tật dương vật cũng như các vấn đề nam khoa khác.</span>
      <span class="last-text">Bác sĩ Đức là người tiên phong trong lĩnh vực điều trị dương vật trong nước, và cho đến nay đã thực hiện thành công hàng trăm ca phẫu thuật dương vật.</span> 	
    </p>
    <a class="explore-more">Khám phá thêm</a>
  </div>
  <div class="post">
    <img src="/frontend/images/home-penile1.png">
    <p class="text-bold">PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG TẤM ĐỘN SINH HỌC MEGADERM</p>
    <hr>
    <p class="text-small">
      <span>Phẫu thuật tăng kích thước dương vật đã đi một chặng đường dài trên thế giới. Tuy nhiên phương pháp này chưa được nhiều người biết đến tại Việt Nam. Với sự phát triển của khoa học y tế, tấm độn sinh học Megaderm ra đời với nhiều tiềm năng trong việc cấy ghép, nam giới có thể đạt được chiều dài, chu vi và kích thước dương vật mong muốn. Tại Megadom, bạn có thể yên tâm rằng ca phẫu thuật được thực hiện bởi một trong những bác sĩ phẫu thuật dương vật giỏi nhất cả nước - với hàng ngàn bệnh nhân nam hài lòng.</span>
      <span class="last-text">Hãy tưởng tượng bạn có kích thước dương vật khiến bạn cảm thấy tự tin, bạn thực sự thích điều đó và nghĩ rằng bạn là một người đàn ông bản lĩnh và nam tính. Quá trình phẫu thuật đơn giản, nhanh chóng và chỉ mất một thời gian ngắn sau đó có thể sinh hoạt lại bình thường. Tấm độn Megaderm® có thể tồn tại vĩnh viễn, giống như một bộ phận của cơ thể người.</span> 	
    </p>
    <a class="explore-more">Khám phá thêm</a>
    <div class="last-post">
      <p class="title">LỢI ÍCH CỦA PHƯƠNG PHÁP LÀM TO DƯƠNG VẬT BẰNG SILICONE</p>
      <p class="content-left">
        <span class="first-span"><b>Bền và có thể tháo dời dễ dàng</b></span>
        <span>Nhìn <b>tự nhiên</b> và khó bị phát hiện</span>
        <span>Được làm <b>silicone y tế, rất mềm</b></span>
        <span>Chi phí <b>hợp lý</b></span>
        <span>Phẫu thuật được bác sĩ <b>tùy chỉnh theo kích cỡ mong muốn</b> của bạn</span>
      </p>
      <a class="explore-more">Khám phá thêm</a>
      <p class="content-right">Làm to bằng silicon sẽ <b>tăng</b> chu vi dương vật lên từ <b>1-3cm</b> tuỳ thuộc vào kích cỡ của silicon và phụ thuộc vào độ giãn nở của da thân dương vật. 
        <span><b>Tỷ lệ thành công của phương pháp silicon là 100%</b> (bất kỳ tác dụng phụ nào xảy ra thường là kết quả của việc bệnh nhân không tuân thủ hướng dẫn sau phẫu thuật, điều này sẽ được chuyên gia của Megadom giải thích đầy đủ trước khi làm thủ thuật).</p></span>
      <img src="/frontend/images/rectangle105.png">
    </div>
  </div>
  <div class="library">
    <p class="text-bold">Thư viện</p>
    <p class="text-small">khám phá</p>
    <hr>
  </div>
  <div class="comments">
    <div class="customer-comments">
      <p class="text-title">CẢM NHẬN CỦA KHÁCH HÀNG</p>
      <hr>
    </div>
    <p class="text-box text-small-1">“Trước kia tôi còn ngần ngại khi nghĩ đến việc làm to "chỗ ấy". Nhưng để cải thiện chuyện chăn gối, tôi đã tìm hiểu từ nhiều nguồn thông tin.  Thật sự đã không lầm khi đặt niềm tin vào Megadom. Tôi đã tự tin hơn rất nhiều!”</p>
    <p class="text-box text-small-2">Chỉ khi gặp Bác sĩ Đức, tôi mới thấy nhẹ người vì được "bắt đúng bênh". Không hề đau đơn hay khó khăn gì như tôi lo sợ, giờ thì vợ tôi còn thích hơn cả.</p>
    <p class="text-box text-small-3">“Bác sĩ nhiệt tình và chu đáo nên tôi cảm thấy an tâm. Phẫu thuật cũng không đau đớn gì và hiệu quả rõ rệt. Tôi nghĩ mình đã chọn đúng.”</p>

    <img src="/frontend/images/home-penile2.png">
    <p class="text-bold">PHẪU THUẬT KÉO DÀI <span>DƯƠNG VẬT</span></p>
    <hr>
    <p class="text-small">
      <span>Không phải tất cả đàn ông đều may mắn có được kích thước dương vật họ muốn - một số nam giới có dương vật rất ngắn, hay còn gọi là hội chứng dương vật nhỏ - micropenis. Đây là tình trạng chiều dài dương vật dưới 3 inch (7.62cm). Phẫu thuật kéo dài dương vật bằng phương pháp cắt dây chằng chéo tại Megadom có thể giúp bạn cải thiện chiều dài cũng như mang lại hình dáng và cấu trúc dương vật khiến bạn trở nên nam tính và tự tin hơn.</span>
      <span class="last-text">Bạn sẽ không còn lo lắng về việc tham gia những hoạt động như đi bơi hay e ngại việc tiến xa hơn trong một mối quan hệ tình cảm. Bạn cũng không còn suy nghĩ quá nhiều liệu dương vật của mình có đạt chiều dài chuẩn hay không. Tại Megadom, bạn có thể lựa chọn chiều dài phù hợp nhất với bạn thân. Bác sĩ Đức là một trong những bác sĩ chuyên khoa Tiết niệu - Nam học hàng đầu tại Việt Nam và có thể giúp bạn trong hành trình lấy lại sự tự tin vào cơ thể của mình.</span> 	
    </p>
    <a class="explore-more">Khám phá thêm</a>
    <div class="last-post">
      <p class="title">PHẪU THUẬT CẮT DÂY CHẰNG CHÉO KẾT HỢP LOẠI BỎ LỚP XƯƠNG MU</p>
      <p class="content-left">
        <span class="first-span">Dương vật dài ra trung bình 2-3 cm</span>
        <span>Thời gian phẫu thuật nhanh chóng</span>
        <span>Không gây rối loạn cương dương</span>
        <span>Không ảnh hưởng gì đến sinh sản</span>
      </p>
      <a class="explore-more">Khám phá thêm</a>
      <p class="title-2">LÝ DO <span>BẠN NÊN CHỌN</span> MEGADOM</p>
      <p class="content-right">Bác sĩ chuyên môn đầu ngành. Công nghệ phẫu thuật và chất liệu phẫu thuật từ Hàn Quốc tiên phong và độc quyền sử dụng.
        <span>Đảm bảo phẫu thuật an toàn tuyệt đối, quy trình tiệt trùng theo tiêu chuẩn của Bộ Y tế.</span>
      </p>
      <a class="explore-more-last">Khám phá thêm</a>
      <img src="/frontend/images/rectangle103.png">
    </div>
  </div>
  <div class="news">
    <div class="news-text">
      <p class="text-bold">Tin tức</p>
      <p class="text-small">xem tất cả tin tức</p>
      <hr>
    </div>
    <div class="news-block news-1">
      <img src="/frontend/images/rectangle84.png">
      <p class="title">QUY TRÌNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT VÀ NHỮNG LƯU Ý HẬU PHẪU</p>
    </div>
    <div class="news-block news-2">
      <img src="/frontend/images/rectangle84.png">
      <p class="title">DƯƠNG VẬT VÀ NHỮNG LƯU Ý HẬU PHẪU</p>
    </div>
  </div>
  <div class="question-member">
    <div class="question-title">
      <p class="text-title">CÂU HỎI THƯỜNG GẶP VỀ PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
      <hr>
    </div>
    <div class="question-1">
      <div class="title">
        <p class="text-bold">(1) Phẫu thuật làm to dương vật có ảnh hưởng đến độ cương dương sau này không?</p>
      </div>
      <div class="answers-member">
        <p class="text-small">Phẫu thuật làm to Dương Vật không ảnh hưởng đến việc bơm máu vào dương vât, nó nằm ngoài thân dương vật. Độ cương dương trước phẫu thuật như thế nào thì sau vẫn vậy.</p>
      </div>
    </div>
    <div class="question-2">
      <div class="title">
        <p class="text-bold">(2) Phẫu thuật làm to dương vật có ảnh hưởng gì đến sức khỏe không?</p>
      </div>
      <div class="answers-member">
        <p class="text-small">Hoàn toàn không ảnh hưởng gì nhiều đến sức khỏe. Phẫu thuật chỉ kéo dài 40 – 60p, sau khi làm xong người bệnh có thể tự đi về nhà. Người bệnh chỉ bị đau duy nhất ở 2 mũi tiêm gây tê gốc dương vât.</p>
      </div>
    </div>
    <div class="question-3">
      <div class="title">
        <p class="text-bold">(3) Mức độ cải thiện sau khi làm to dương vật là như thế nào?</p>
      </div>
      <div class="answers-member">
        <p class="text-small">Tùy thuộc vào độ co giãn da của thân dương vật mà Dr. Megadom quyết định đặt tấm độn dày hay mỏng. Mức độ cải thiện về chu vi thấp nhất là 2cm, nhiều nhất là 5cm.</p>
      </div>
    </div>
    <div class="question-4">
      <div class="title">
        <p class="text-bold">(4) Còn các phương pháp tăng kích cỡ dương vật không phẫu thuật thì sao?</p>
      </div>
      <div class="answers-member">
        <p class="text-small">Thật không may, không có phương pháp không phẫu thuật để mở rộng dương vật đã được chứng minh là hiệu quả. Các phương pháp không phẫu thuật để đạt được một dương vật lớn hơn có thể bao gồm bơm, thuốc viên hoặc jelqing, nhưng không có bằng chứng nào cho thấy những phương pháp này có hiệu quả và đôi khi có thể gây hại cho bệnh nhân..</p>
      </div>
    </div>
    <div class="question-5">
      <div class="title">
        <p class="text-bold">(5) Các phương pháp tăng kích thước dương vật khác thì sao (tiêm mỡ tự thân, tiêm Filler)?</p>
      </div>
      <div class="answers-member">
        <p class="text-small">Một số phương pháp làm to dương vật khác như tiêm mỡ tự thân, tiêm Filler khoảng 10 năm về trước được áp dụng rất nhiều. Nhưng đến nay thì những nhược điểm của phương pháp này được bộc lộ rất rõ. Sau khi mỡ tự thân hoặc Filler được tiêm vào thì chúng không ổn định, sẽ di chuyển dần dần xuống phía dưới của thân dương vật. Làm cho hình dạng dương vật bị biến dạng. Hoặc lớp mỡ này tiêu đi không đồng đều và co nhỏ lại tạo thành những cục trên thân dương vật. Hậu quả là dương vật chỗ to chỗ nhỏ. Thời gian tác dụng của tiêm mỡ và Filler chỉ có tác dụng 4-6 tháng, và thường thì người bệnh sẽ phải làm 3-5 lần tiêm nhắc lại.</p>
      </div>
    </div>
    <div class="question-6">
      <div class="title">
        <p class="text-bold">(6) Nếu trường hợp phẫu thuật xảy ra các biến chứng không mong muốn thì sao?</p>
      </div>
      <div class="answers-member">
        <p class="text-small">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có tỷ lệ thành công là 100%, có một số trường hợp người bệnh bị kích ứng nhẹ tại chỗ và chỉ cần dùng thuốc là khỏi. Nếu xảy ra tình trạng đào thải hoặc những biến chứng khác sau phẫu thuật, Megadom cam kết sẽ trả lại bệnh nhân chi phí phẫu thuật, đồng thời tiến hành phẫu thuật tháo tấm độn miễn phí. Nếu có bất kỳ chi phí nào phát sinh thêm sau phẫu thuật thì Megadom sẽ chịu trách nhiệm chi trả toàn bộ</p>
      </div>
    </div>
  </div> --}}

</div>
@endsection
