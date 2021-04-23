import 'package:flutter/material.dart';
import 'package:rest_flutter/models/image_model.dart';

class ImageWidget {
  static Widget build(ImageModel imageModel) {
    return buildWidget(imageModel);
  }

  /*
  * Construir widget
   */

  static Widget buildWidget(ImageModel imageModel) {
    return FadeInImage(
      placeholder: AssetImage("assets/loading.gif"),
      image: NetworkImage(imageModel.url),
    );
  }
}
