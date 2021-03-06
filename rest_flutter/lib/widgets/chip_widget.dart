import 'package:flutter/material.dart';
import 'package:rest_flutter/models/chip_model.dart';

/* Esta clase solo se va a encargar de construir uyn chip por vez */

class ChipWidget {
  //final ChipModel chipModel;
  //const ChipWidget(this.chipModel);

  static Widget build(ChipModel chipModel) {
    return buildWidget(chipModel);
  }

  static Widget buildWidget(ChipModel chipModel) {
    return Chip(
        backgroundColor: Color(int.parse(chipModel.colorBg, radix: 16)),
        avatar: CircleAvatar(
          backgroundColor: Color(int.parse(chipModel.colorIcon, radix: 16)),
          child: Icon(Icons.access_alarm),
        ),
        label: Text(chipModel.label));
  }
}
