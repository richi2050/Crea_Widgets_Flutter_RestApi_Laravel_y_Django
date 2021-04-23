import 'package:flutter/material.dart';
import 'package:rest_flutter/models/text_model.dart';

class TextWidget {
  static Widget build(TextModel textModel) {
    return buildWidget(textModel);
  }

  /*
  * Construir widget
   */

  static Widget buildWidget(TextModel textModel) {
    return Text(textModel.text);
  }
}
