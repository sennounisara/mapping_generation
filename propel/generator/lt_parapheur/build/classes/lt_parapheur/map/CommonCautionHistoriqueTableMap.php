<?php



/**
 * This class defines the structure of the 'caution_historique' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonCautionHistoriqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonCautionHistoriqueTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('caution_historique');
        $this->setPhpName('CommonCautionHistorique');
        $this->setClassname('CommonCautionHistorique');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_caution', 'IdCaution', 'INTEGER', true, null, null);
        $this->addColumn('detail_action', 'DetailAction', 'VARCHAR', true, 250, null);
        $this->addColumn('acteur', 'Acteur', 'VARCHAR', true, 250, null);
        $this->addColumn('date_action', 'DateAction', 'TIMESTAMP', true, null, null);
        $this->addColumn('infos', 'Infos', 'CLOB', false, null, null);
        $this->addColumn('user_type', 'UserType', 'CHAR', true, null, 'entreprise');
        $this->getColumn('user_type', false)->setValueSet(array (
  0 => 'entreprise',
  1 => 'banque',
  2 => 'agent',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCautionHistoriqueTableMap
