
// import $ from 'jquery.js'

window.ser = {
  get(url, data){
    return $.get(url, data);
    // return $.get(`/${url}`, data);
  },
  post(url, data){
    return $.post(url, data);
    // return $.get(`/${url}`, data);
  },
};

// export default ser
