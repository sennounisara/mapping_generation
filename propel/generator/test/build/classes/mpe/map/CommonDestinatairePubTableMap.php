<?php



/**
 * This class defines the structure of the 'Destinataire_Pub' table.
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
class CommonDestinatairePubTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonDestinatairePubTableMap';

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
        $this->setName('Destinataire_Pub');
        $this->setPhpName('CommonDestinatairePub');
        $this->setClassname('CommonDestinatairePub');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_avis', 'IdAvis', 'INTEGER', true, null, null);
        $this->addColumn('id_support', 'IdSupport', 'INTEGER', true, null, null);
        $this->addColumn('etat', 'Etat', 'CHAR', true, 3, '0');
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', true, 20, null);
        $this->addColumn('date_publication', 'DatePublication', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDestinatairePubTableMap
