<?php



/**
 * This class defines the structure of the 'destinataire_centrale_pub' table.
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
class CommonDestinataireCentralePubTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonDestinataireCentralePubTableMap';

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
        $this->setName('destinataire_centrale_pub');
        $this->setPhpName('CommonDestinataireCentralePub');
        $this->setClassname('CommonDestinataireCentralePub');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 20, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_annonce_jal', 'IdAnnonceJal', 'INTEGER', false, 20, null);
        $this->addColumn('id_compte', 'IdCompte', 'INTEGER', false, 20, null);
        $this->addColumn('ids_journaux', 'IdsJournaux', 'VARCHAR', false, 200, null);
        $this->addColumn('statut', 'Statut', 'CHAR', false, null, null);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', false, 20, '0000-00-00 00:00:00');
        $this->addColumn('date_pub', 'DatePub', 'VARCHAR', false, 20, '0000-00-00 00:00:00');
        $this->addColumn('accuse', 'Accuse', 'VARCHAR', false, 20, null);
        $this->addColumn('id_echange', 'IdEchange', 'INTEGER', false, null, null);
        $this->addColumn('date_ar', 'DateAr', 'VARCHAR', false, 25, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDestinataireCentralePubTableMap
