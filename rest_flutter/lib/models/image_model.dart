import 'package:rest_flutter/widgets/image_widget.dart';

class ImageModel {
  String url;
  String name;
  Function fun;

  ImageModel.constructor(String url) {
    this.url = url;
    this.fun = ImageWidget.build;
  }
}
