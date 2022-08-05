<?php



/**
 * This class defines the structure of the 'EnchereReference' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonEnchereReferenceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEnchereReferenceTableMap';

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
        $this->setName('EnchereReference');
        $this->setPhpName('CommonEnchereReference');
        $this->setClassname('CommonEnchereReference');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('idEnchere', 'Idenchere', 'INTEGER', true, 10, 0);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, '');
        $this->addColumn('quantite', 'Quantite', 'DOUBLE', false, null, null);
        $this->addColumn('isMontant', 'Ismontant', 'CHAR', true, null, '1');
        $this->getColumn('isMontant', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('unite', 'Unite', 'VARCHAR', false, 20, null);
        $this->addColumn('pasMin', 'Pasmin', 'DOUBLE', false, null, 0);
        $this->addColumn('pasMax', 'Pasmax', 'DOUBLE', false, null, null);
        $this->addColumn('valeurReference', 'Valeurreference', 'DOUBLE', false, null, null);
        $this->addColumn('valeurDepartCommune', 'Valeurdepartcommune', 'CHAR', true, null, '1');
        $this->getColumn('valeurDepartCommune', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('valeurDepart', 'Valeurdepart', 'DOUBLE', false, null, null);
        $this->addColumn('typeBaremeReference', 'Typebaremereference', 'CHAR', false, null, null);
        $this->getColumn('typeBaremeReference', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
));
        $this->addColumn('ponderationNoteReference', 'Ponderationnotereference', 'DOUBLE', false, null, 1);
        $this->addColumn('noteMaxBaremeRelatif', 'Notemaxbaremerelatif', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEnchereReferenceTableMap
