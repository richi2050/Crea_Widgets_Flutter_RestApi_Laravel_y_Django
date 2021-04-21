import 'package:flutter/material.dart';
import 'package:rest_flutter/models/chip_model.dart';
import 'package:rest_flutter/utils/custom_drawer.dart';

class ChipPage extends StatelessWidget {
  static const String ROUTE = '/chips';
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text('Chip Pages'),
        ),
        drawer: CustomDrawer.getDrawer(context),
        body: buildWidget(getData()));
  }

  /*
   * Obtiene la data y compone el modelo
   */
  ChipModel getData() {
    return ChipModel.constructor(
        "FFFFFFFF", "FFFF0000", "Ricardo Lugo", "access_alarm");
  }

  Widget buildWidget(ChipModel chipModel) {
    return Chip(
        backgroundColor: Color(int.parse(chipModel.colorBg, radix: 16)),
        avatar: CircleAvatar(
          backgroundColor: Color(int.parse(chipModel.colorIcon, radix: 16)),
          child: Icon(Icons.access_alarm),
        ),
        label: Text(chipModel.label));
  }
}
