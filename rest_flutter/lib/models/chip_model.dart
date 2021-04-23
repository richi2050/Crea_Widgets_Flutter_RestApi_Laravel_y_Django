import 'package:rest_flutter/widgets/chip_widget.dart';

class ChipModel {
  String colorIcon;
  String colorBg;
  String label;
  String icon;
  Function fun;

  ChipModel.constructor(
      String colorIcon, String colorBg, String label, String icon) {
    this.colorIcon = colorIcon;
    this.colorBg = colorBg;
    this.label = label;
    this.icon = icon;
    this.fun = ChipWidget.build;
  }
}
