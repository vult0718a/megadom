@extends('user.layout.main')

@section('title')
<title>Phẫu thuật kéo dài</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/user/page/2-3.css">
<style>
  .collapsible {
    background-color: #FFFFFF;
    cursor: pointer;
    width: 100%;
    border: none;
    outline: none;
    padding: 22px 30px;
    font-family: 'WorkSans-SemiBold';
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 170%;
    text-align: justify;
    color: #000000;
    display: inline-flex;
    align-items: center;
  }

  .qa .collapsible span {
    width: 92%;
  }

  .collapsible:after {
    content: url(/frontend/images/vector-down.png);
    margin: auto;
    
  }
  
  .active:after {
    content: url(/frontend/images/vector-down.png);
    transform: rotate(180deg);
  }
  
  .content {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #FFFFFF;
    color: #000000;
    width: 100%;
    margin-bottom: 8px;

    font-family: 'WorkSans-Medium';
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 170%;
    text-align: justify;
    color: #000000;
    padding-left: 30px;
    padding-right: 97px;
  }
</style>
@endsection

@section('content')
  <div class="screen2-3">
    <div class="banner">
      <div class="container">
        <div class="text-banner col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold">Phẫu thuật kéo dài dương vật</p>
          <div class="vertical"></div>
          <p class="text-medium">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng. </p>
          <p class="text-small">Có nhiều yếu tố ảnh hưởng đến chất lượng đời sống tình dục của nam giới. Nếu bạn cho rằng dương vật của mình quá ngắn hoặc bạn không hài lòng với chiều dài dương vật của mình, Megadom có thể giúp bạn. Bác sĩ Đức là một trong những bác sĩ chuyên khoa Tiết niệu - Nam học hàng đầu tại Việt Nam và có thể giúp bạn trong hành trình lấy lại sự tự tin vào cơ thể của mình.</p>
          <div class="block-contact">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</div>
        </div>
      </div>
    </div>
    <div class="tag container col-xl-6 col-lg-6 col-sm-12 col-12">
      <a href="#"><div class="tag-block block-1"><span>Đây Là Phẫu Thuật Gì?</span></div></a>
      <a href="#"><div class="tag-block block-2"><span>Tấm Độn Sinh Học Megaderm</span></div></a>
      <a href="#"><div class="tag-block block-3"><span>Ưu Điểm Của Phương Pháp</span></div></a>
      <a href="#"><div class="tag-block block-4"><span>Ảnh Trước Và Sau Phẫu Thuật</span></div></a>
      <a href="#"><div class="tag-block block-5"><span>Trải Nghiệm Của Khách Hàng</span></div></a>
      <a href="#"><div class="tag-block block-6"><span>Hiệu Quả Của Phương Pháp</span></div></a>
      <a href="#"><div class="tag-block block-7"><span>Quy Trình Phẫu Thuật</span></div></a>
      <a href="#"><div class="tag-block block-8"><span>Lưu Ý</span></div></a>
      <a href="#"><div class="tag-block block-9"><span>Tính Khả Thi Và Những Biến Chứng</span></div></a>
      <a href="#"><div class="tag-block block-10"><span>Ai Nên Thực Hiện Phẫu Thuật</span></div></a>
      <a href="#"><div class="tag-block block-11"><span>Câu Hỏi Thường Gặp</span></div></a>
    </div>
    <div class="concept">
      <div class="concept-top">
        <div class="concept-top-contnet col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold">PHẪU THUẬT KÉO DÀI DƯƠNG VẬT LÀ GÌ?</p>
          <hr>
          <p class="text-medium concept-text-medium-1">Phẫu thuật kéo dài dương vật là một phẫu thuật điều trị ngoại trú nhằm mục đích tăng chiều dài của dương vật. Phẫu thuật kéo dài dương vật bằng cắt dây chằng chéo không phải là việc kéo giãn dương vật mà là đem phần ẩn của dương vật - vốn bị chôn dưới da, ra bên ngoài bằng kỹ thuật cắt dây treo. Kết hợp với phương pháp loại bỏ lớp mỡ trên xương mu, chiều dài dương vật có thể tăng tối đa. Thời gian phẫu thuật kéo dài 60-90 phút, bệnh nhân có thể về trong ngày.</p>
        </div>
        <iframe id="iframe-3" class="col-xl-6 col-lg-6 col-sm-12 col-12"  width="100%" height="360px" src="https://www.youtube.com/embed/1fCJ2cCtP8Q"></iframe>
      </div>
      <div class="concept-bottom">
        <div class="concept-title">
          <p class="text-bold">DÂY CHẰNG CHÉO</p>
          <hr>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12">
            <img id="concept-img-1" style="width:100%" src="/frontend/images/home-penile-3x.png">
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12">
            <div class="text text-small-1">
              <p class="text-medium">Dây chằng treo dương vật là dây chằng bám vào thân dương vật, giúp cho dương vật khi cương lên thì nó nằm ở góc 3h (hay thẳng đứng). Nếu dây chằng này có vấn đề thì sẽ dẫn đến một số hậu quả: </p>
              <p class="text-medium">- Nếu dây chằng treo dương vật bám sâu về phía quy đầu của dương vật thì sẽ làm cho chiều dài dương vật ngắn lại. Giữa xương mu và dương vật tạo thành một cái gờ rất cao.</p>
              <p class="text-medium">- Nếu dây chằng này bám không đúng chính giữa của thân dương vật thì làm dương vật lệch sang một bên trái hoặc phải. Điều này làm cho dương vật lệch gây mất thẩm mỹ, gây khó khăn trong quan hệ tình dục.</p>
              <p class="text-medium">- Dây chằng này thực chất không phải là một “sợi dây” hay sợi gân, mà nó là một tấm phên hình tam giác. Việc kéo dài dương vật bằng cắt dây chằng treo dương vật không phải là cắt đứt hoàn toàn dây chằng này mà chỉ cắt một phần dây chằng.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12">
            <p class="text-title">LỚP MỠ TRÊN XƯƠNG MU</p>
            <ul class="text-small">
              <li>Lớp mỡ trên xương mu càng dày sẽ càng làm chiều dài dương vật ngắn lại, trong khi chiều dài dương vật không thay đổi.</li>
              <li>Thông thường lớp mỡ này sẽ làm dương vật ngắn đi từ 1-2cm, tuỳ thuộc vào độ dày mỏng của lớp mỡ này.</li>
              <li>Việc loại bỏ lớp mỡ này sẽ làm dương vật dài ra khoảng 1cm.</li>
            </ul>
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12">
            <img id="concept-img-1" style="width:100%" src="/frontend/images/home-penile4.png">
          </div>
        </div>
      </div>
    </div>
    <div class="booking booking-1">
      <p class="text-semibold col-xl-9 col-lg-9 col-sm-9 col-12">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng! </p>
      <div class="booking-block">ĐẶT LỊCH TƯ VẤN</div>
    </div>
    <div class="result">
      <div class="top">
        <div class="result-title">
          <p class="text-bold">KẾT QUẢ TRƯỚC VÀ SAU PHẪU THUẬT</p>
          <hr>
        </div>
        <div class="result-left col-xl-6 col-lg-6 col-sm-12 col-12">
          <div class="text-medium text-medium-1">Xem <a>thư viện ảnh trước và sau khi phẫu thuật</a> tăng kích cỡ dương vật của chúng tôi để tìm hiểu xem những kết quả bạn có thể đạt được nếu phẫu thuật.</div>
          <img id="image-1">
          <div class="library">THƯ VIỆN HÌNH ẢNH</div>
        </div>
        <div class="image-2 col-xl-6 col-lg-6 col-sm-12 col-12">
          <div class="backround">
            <div class="text">
              <p class="text-bold">HÌNH ẢNH CHỨA YẾU TỐ NHẠY CẢM</p>
              <p class="text-medium">TÔI ĐÃ TRÊN 18 TUỔI</p>
              <a href="#"><div class="confirm">XÁC NHẬN</div></a>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="evaluate-title container">
          <p class="text-bold">ĐÁNH GIÁ VÀ PHẢN HỒI CỦA BỆNH NHÂN SAU PHẪU THUẬT</p>
          <hr>
          <p class="text-medium text-medium-2">Megadom đã giúp hàng trăm bệnh nhân đạt được kích thước dương vật mà họ mong muốn.</p>
        </div>
        <div class="bottom-block-1">
          <iframe id="iframe-1" class="col-xl-6 col-lg-6 col-sm-12 col-12" height="360px" src="https://www.youtube.com/embed/1fCJ2cCtP8Q"></iframe>
          <div class="text-medium text-medium-3 col-xl-6 col-lg-6 col-sm-12 col-12"><span>Bệnh nhân 1:</span> Vốn là Việt Kiều tại Anh Quốc nhưng anh đã vượt qua rất nhiều khó khắn trong thời điểm Covid để trở về Việt Nam làm phẫu thuật tăng kích thước dương vật tại Megadom. Đây là trường hợp rất đặc biệt vì anh phải chi tới 200 triệu tiền vé máy bay một chiều từ Anh về Việt Nam. Khi mới về, anh tiếp tục mất tới 3 tuần để cách ly tập trung và thêm 1 tuần cách ly tại nhà. Chia sẻ về lý do phẫu thuật, anh nói rằng mình và người yêu không hòa hợp trong chuyện chăn gối. Mặc dù người yêu không nói ra nhưng anh nhận ra sự thất vọng và khó chịu từ cô. Đây cũng là nguyên nhân chính dẫn đến sự bất hòa trong mối quan hệ của hai người.</div>
        </div>
        <div class="bottom-block-2">
          <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
            <div class="effective-title">
              <p class="text-bold">HIỆU QUẢ CỦA PHƯƠNG PHÁP</p>
              <hr>
            </div>
            <div class="text-medium text-medium-4">
              <p class="text-medium text-1">Phẫu thuật kéo dài dương vật bằng cắt dây chằng treo dương vật kết hợp loại bỏ lớp xương mu sẽ làm dương vật dài ra từ 1-2cm. Sự gia tăng chiều dài trên dương vật sẽ phụ thuộc vào 3 yếu tố: các cấu trúc giải phẫu; thân dương vật và vị trí của dây chằng treo.</p>
              <p class="text-medium text-2">Nếu sau phẫu thuật các bệnh nhân tăng cân lên 3-5kg thì lớp mỡ trên xương mu này sẽ lại phát triển và có thể làm chiều dài dương vật ngắn đi.</p>
              <p class="text-medium text-3">Link Video: <a>https://www.youtube.com/watch?v=hwjvnqyhjSc&t=53s</a></p>
            </div>
          </div>
          <iframe id="iframe-2" class="col-xl-6 col-lg-6 col-sm-12 col-12" width="100%" height="360px" src="https://www.youtube.com/embed/1fCJ2cCtP8Q"></iframe>
        </div>
        
        
      </div>
      
      
    </div>
    <div class="backround-before-surgery">
      <div class="before-surgery container">
        <p class="text-bold-1">Trước phẫu thuật</p>
        <div class="step step-1">
          <p class="text-bold">Bước 1: Gửi câu hỏi và đăng ký tư vấn phẫu thuật tăng kích thước dương vật</p>
          <p class="text-medium">Đầu tiên, chúng tôi yêu cầu bạn gửi câu hỏi về phẫu thuật tăng kích thước dương vật bằng tấm độn Megadom - bạn sẽ được chỉ định đích thân chuyên gia tư vấn hỗ trợ giải đáp các thắc mắc và cung cấp thông tin đầy đủ về quy trình phẫu thuật.</p>
        </div>
        <div class="step step-2">
          <p class="text-bold">Bước 2: Xác định bạn có đủ điều kiện để thực hiện phẫu thuật</p>
          <p class="text-medium">Trong giai đoạn trước phẫu thuật, đội ngũ y tế của chúng tôi sẽ xác định xem bạn có đủ điều kiện để thực hiện phẫu thuật hay không.</p>
        </div>
        <div class="step step-3">
          <p class="text-bold">Bước 3: Tư vấn trực tiếp trước phẫu thuật</p>
          <p class="text-medium">Trong quá trình tư vấn trực tiếp trước phẫu thuật, bác sĩ của Megadom chia sẻ chi tiết về quy trình, các biến chứng tiềm ẩn, rủi ro có thể gặp phải cũng như tất cả các hướng dẫn trước và sau phẫu thuật để quá trình diễn ra thuận lợi nhất.</p>
        </div>
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold-2">Trong phẫu thuật</p>
          <p class="text-medium text-1">Quy trình tăng kích thước dương vật bằng tấm độn Silicon là một phẫu thuật ngoại trú tương đối ngắn (15-30 phút), thường bệnh nhân có thể ra viện ngay sau khi phẫu thuật.</p>
          <p class="text-medium text-2">Trong quá trình thực hiện, bệnh nhân đầu tiên được cạo sạch lông mu và được sát khuẩn bằng Betadin. Dưới đây là quy trình phẫu thuật tăng kích cỡ dương vật bằng tấm độn Silicon tại Megadom:</p>
          <div class="text-medium text-3">
            <p class="left-step step-1"><b>Bước 1:</b> Bệnh nhân được gây tê tại gốc dương vật bằng 2 mũi tiêm gây tê.</p>
            <p class="left-step step-2"><b>Bước 2:</b> Rạch da dương vật gần phía quy đầu dài khoảng 3cm.</p>
            <p class="left-step step-3"><b>Bước 3:</b> Tách rộng tổ chức dưới da thân dương vật xuống phía dưới gốc dương vật</p>
            <p class="left-step step-4"><b>Bước 4:</b> Cầm máu kỹ</p>
            <p class="left-step step-5"><b>Bước 5:</b> Lựa chọn kích thước tấm độn Silicone, đặt tấm độn vào dưới da dương vật.</p>
            <p class="left-step step-6"><b>Bước 6:</b> Khâu cố định tấm độn Silicone</p>
            <p class="left-step step-7"><b>Bước 7:</b> Khâu phục hồi tổ chức dưới da và lớp da thân dương vật</p>
          </div>
        </div>
        <div class="vertical"></div>
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold-3">Sau phẫu thuật</p>
          <p class="text-medium text-1">Bệnh nhân nghỉ ngơi 1 tiếng sau phẫu thuật. Người bệnh có thể ra viện ngay sau đó.</p>
          <p class="text-medium text-2">Đối với người bệnh thì phẫu thuật này chỉ giống như phẫu thuật cắt da bao quy đầu. Rất đơn giản và nhẹ nhàng, không đau, sau phẫu thuật người bệnh đi đứng bình thường.</p>
        </div>
      </div>
    </div>
    <div class="note container">
      <div class="note-title">
        <p class="text-bold">NHỮNG LƯU Ý HẬU PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG TẤM ĐỘN SILICON</p>
        <hr>
      </div>
      <div class="text col-xl-6 col-lg-6 col-sm-12 col-12">
        <p class="text-medium text-1">Sau khi phẫu thuật, bệnh nhân có thể sinh hoạt bình thường.</p>
        <p class="text-medium text-2">Bệnh nhân nên mặc quần áo và quần lót rộng rãi trong vài tuần đầu tiên.</p>
        <p class="text-medium text-3">Sau 2 tuần, bệnh nhân có thể quan hệ tình dục.</p>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12" id="image-3" src="/frontend/images/home-penile-8.png">
    </div>
    <div class="booking booking-2">
      <p class="text-semibold col-xl-9 col-lg-9 col-sm-9 col-12">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng! </p>
      <div class="booking-block"><span>ĐẶT LỊCH TƯ VẤN</span></div>
    </div>
    <div class="backround-feasibility">
      <div class="feasibility container">
        <div class="feasibility-title">
          <p class="text-bold">TÍNH KHẢ THI VÀ NHỮNG BIẾN CHỨNG</p>
          <hr>
        </div>
        <div class="vertical"></div>
        <div class="text col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-medium text-1"><b>Tỷ Lệ Đào Thải:</b> Silicon là vật liệu bên ngoài (không phải vật liệu tự thân giống Megaderm) nên vẫn có khả năng bị đào thải.</p>
          <p class="text-medium text-2"><b>Thẩm Mỹ:</b> Giữ 2 loại Ring và T-ring thì Silicon T-ring sẽ giúp tăng kích thước dương vật đều hơn và khó bị phát hiện hơn.</p>
          <p class="text-medium text-3"><b>Hậu Phẫu Thuật:</b> Vì silicon là vật liệu bên ngoài nên mới đầu có thể gây cảm giác hơi kích ứng. Tuy nhiên cảm giác này sẽ dần biến mất theo thời gian khi miếng độn ổn định đúng vị trí.</p>
          <p class="text-medium text-4"><b>Tác Dụng Về Lâu Dài:</b> Sau khi phẫu thuật làm to bằng Silicon, bệnh nhân sẽ giảm cảm giác tiếp xúc da, điều này không phải là nhược điểm mà là lợi thế giúp các nam giới kéo dài thời gian quan hệ. Đồng thời đây cũng là một phương án giúp điều trị rối loạn xuất tinh sớm ở đàn ông. Thời gian tác dụng của silicon sẽ kéo dài từ 6-8 năm, việc lấy bỏ tấm silicon khi bạn không thích là rất dễ dàng và nhanh chóng.</p>
        </div>
        <img class="col-xl-6 col-lg-6 col-sm-12 col-12" id="image-3" src="/frontend/images/home-penile-8.png">
      </div>
    </div>
    <div class="when container">
      <div class="when-title">
        <p class="text-bold">KHI NÀO THÌ BẠN NÊN THỰC HIỆN PHẪU THUẬT<span> TĂNG KÍCH THƯỚC DƯƠNG VẬT</span></p>
        <hr>
      </div>
      <p class="text-medium note">Những nam giới có nhu cầu cải thiện kích thước dương vật hoặc có bệnh lý gây kích thước dương vật nhỏ dưới chuẩn thì có thể phẫu thuật tăng kích thước dương vật bằng tấm độn Silicon:</p>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12" id="image-3" src="/frontend/images/home-penile-8.png">
      <div class="vertical"></div>
      <ul class="text-small col-xl-6 col-lg-6 col-sm-12 col-12">
        <li>Người có kích thước dương vật quá nhỏ so với bình thường. Theo dữ liệu thống kê từ 14594 nam giới Việt Nam công bố vào năm 2021, chu vi dương vật trung bình của nam giới Việt Nam là 8.16cm.</li>
        <li>Người có kích thước dương vật không tương xứng với cơ thể (cơ thể quá to nhưng dương vật lại quá nhỏ). Nhiều người béo phì và béo bụng còn khiến dương vật ngắn và dương vật bị vùi vào trong.</li>
        <li>Các trường hợp bị chấn thương, ảnh hưởng đến hình dạng và kích thước của dương vật.</li>
        <li>Người có kích thước dương vật ở mức bình thường nhưng vẫn có cảm giác thiếu tự tin trước đối phương.</li>
        <li>Người bị xuất tinh sớm nhưng không muốn sử dụng thuốc.</li>
      </ul>
    </div>
    <div class="contact-specialist"><span>LIÊN HỆ CHUYÊN GIA</span></div>
    <div class="backround-qa">
      <div class="qa container">
        <div class="qa-title">
          <p class="text-bold">CÂU HỎI THƯỜNG GẶP</p>
          <hr>
        </div>
        <div class="qa-content">
          <button class="collapsible"><span>Phương pháp đặt miếng độn Megaderm/Silicon có biến chứng gì không?</span></button>
          <div class="content">
            <p>Dù là một phẫu thuật nhỏ nhưng vẫn là 1 loại phẫu thuật y khoa, bắt buộc phải được thực hiện bởi bác sĩ có tay nghề và kinh nghiệm. Đã là phẫu thuật, sẽ không tránh được một số biến chứng có thể xảy ra như: Chảy máu vết mổ, nhiễm trùng vết mổ, sưng nề tại vết mổ... Những biến chứng này đều có thể hạn chế được tối đa nhờ vào kỹ thuật và kinh nghiệm của bác sĩ phẫu thuật. Trong trường hợp hãn hữu có xảy ra thì đều có những phương pháp khắc phục ngay sau đó.</p>
          </div>
          <button class="collapsible"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon thì có ảnh hưởng gì đến khả năng sinh con hay không?</span></button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="collapsible"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có ảnh hưởng gì đến độ cương cứng của dương vật không?</span></button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="collapsible"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm có đau không?</span></button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="collapsible"><span>Các phương pháp tăng kích thước dương vật khác thì sao (tiêm mỡ tự thân, tiêm Filler)?</span></button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="collapsible"><span>Liệu có phương pháp tăng kích thước dương vật không phẫu thuật hiệu quả không?</span></button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="collapsible"><span>Nếu trường hợp phẫu thuật xảy ra các biến chứng không mong muốn thì sao?</span></button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="collapsible"><span>Phương pháp phẫu thuật Penuma</span></button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + 20 + "px";
        } 
      });
    }
  </script>
@endsection