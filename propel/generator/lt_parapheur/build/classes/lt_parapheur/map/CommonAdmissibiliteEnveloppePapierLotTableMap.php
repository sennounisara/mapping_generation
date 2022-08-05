<?php



/**
 * This class defines the structure of the 'Admissibilite_Enveloppe_papier_Lot' table.
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
class CommonAdmissibiliteEnveloppePapierLotTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonAdmissibiliteEnveloppePapierLotTableMap';

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
        $this->setName('Admissibilite_Enveloppe_papier_Lot');
        $this->setPhpName('CommonAdmissibiliteEnveloppePapierLot');
        $this->setClassname('CommonAdmissibiliteEnveloppePapierLot');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_offre_papier', 'IdOffrePapier', 'INTEGER', true, 22, 0);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('sous_pli', 'SousPli', 'INTEGER', true, 3, 0);
        $this->addColumn('admissibilite', 'Admissibilite', 'INTEGER', true, 1, 0);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addPrimaryKey('type_enveloppe', 'TypeEnveloppe', 'INTEGER', true, 1, 2);
        $this->addColumn('sous_reserve', 'SousReserve', 'CHAR', true, null, '0');
        $this->getColumn('sous_reserve', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAdmissibiliteEnveloppePapierLotTableMap
