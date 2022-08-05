<?php



/**
 * This class defines the structure of the 't_CAO_Intervenant_Externe' table.
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
class CommonTCAOIntervenantExterneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCAOIntervenantExterneTableMap';

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
        $this->setName('t_CAO_Intervenant_Externe');
        $this->setPhpName('CommonTCAOIntervenantExterne');
        $this->setClassname('CommonTCAOIntervenantExterne');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_intervenant_externe', 'IdIntervenantExterne', 'BIGINT', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_ref_val_civilite', 'IdRefValCivilite', 'INTEGER', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 50, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 50, null);
        $this->addColumn('organisation', 'Organisation', 'VARCHAR', true, 50, null);
        $this->addColumn('fonction', 'Fonction', 'VARCHAR', true, 100, null);
        $this->addColumn('id_ref_val_type_voix_defaut', 'IdRefValTypeVoixDefaut', 'INTEGER', true, null, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 255, '');
        $this->addColumn('code_postal', 'CodePostal', 'CHAR', true, 15, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 100, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('id_ref_val_mode_communication', 'IdRefValModeCommunication', 'TINYINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCAOIntervenantExterneTableMap
