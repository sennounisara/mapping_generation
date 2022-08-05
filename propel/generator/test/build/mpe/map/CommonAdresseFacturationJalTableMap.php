<?php



/**
 * This class defines the structure of the 'AdresseFacturationJal' table.
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
class CommonAdresseFacturationJalTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAdresseFacturationJalTableMap';

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
        $this->setName('AdresseFacturationJal');
        $this->setPhpName('CommonAdresseFacturationJal');
        $this->setClassname('CommonAdresseFacturationJal');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, 0);
        $this->addColumn('email_ar', 'EmailAr', 'VARCHAR', true, 100, null);
        $this->addColumn('telecopie', 'Telecopie', 'VARCHAR', true, 20, null);
        $this->addColumn('information_facturation', 'InformationFacturation', 'LONGVARCHAR', true, null, null);
        $this->addColumn('facturation_sip', 'FacturationSip', 'CHAR', true, null, '0');
        $this->getColumn('facturation_sip', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_blob_logo', 'IdBlobLogo', 'INTEGER', false, null, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAdresseFacturationJalTableMap
