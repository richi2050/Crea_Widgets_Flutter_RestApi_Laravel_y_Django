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
        body: Column(
          children: buildWidgets(getData()),
        ));
  }

  /*
   * Obtiene la data y compone el modelo
   */
  List<ChipModel> getData() {
    List<ChipModel> chipModels = List();

    for (int i = 0; i < 10; i++)
      chipModels.add(ChipModel.constructor(
          "FFFFFFFF", "FFFF0000", "Ricardo Lugo $i", "access_alarm"));

    return chipModels;
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

  List<Widget> buildWidgets(List<ChipModel> chipModels) {
    List<Widget> chipWidgets = List();
    chipModels.forEach((chipModel) {
      chipWidgets.add(buildWidget(chipModel));
    });
    return chipWidgets;
  }
}
