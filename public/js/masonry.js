'use strict';
var grid = document.querySelector('.grid');
var msnry = new Masonry( grid, {
  percentPosition: true,
  itemSelector: '.grid-item',
  gutter: 20,
  horizontalOrder: true
});

let elem = document.querySelector('.grid');

let infScroll = new InfiniteScroll( elem, {
  // options
  path: '?page={{#}}',
  append: '.grid-item',
  outlayer: msnry,
  status: '.page-load-status',
  history: false,
});