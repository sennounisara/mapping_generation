<?php



/**
 * This class defines the structure of the 'Mesure_avancement' table.
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
class CommonMesureAvancementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonMesureAvancementTableMap';

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
        $this->setName('Mesure_avancement');
        $this->setPhpName('CommonMesureAvancement');
        $this->setClassname('CommonMesureAvancement');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_mesure', 'IdMesure', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, null);
        $this->addColumn('annee', 'Annee', 'VARCHAR', true, 4, null);
        $this->addColumn('trimestre', 'Trimestre', 'CHAR', true, 2, null);
        $this->addColumn('siren', 'Siren', 'VARCHAR', true, 9, null);
        $this->addColumn('nic', 'Nic', 'VARCHAR', true, 5, null);
        $this->addColumn('identifiant_service', 'IdentifiantService', 'VARCHAR', true, 100, null);
        $this->addColumn('mail', 'Mail', 'VARCHAR', true, 100, null);
        $this->addColumn('type_pouvoir_adjudicateur', 'TypePouvoirAdjudicateur', 'INTEGER', true, null, null);
        $this->addColumn('departement', 'Departement', 'INTEGER', true, null, null);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', false, 20, null);
        $this->addColumn('date_accuse', 'DateAccuse', 'VARCHAR', false, 20, null);
        $this->addColumn('etat', 'Etat', 'VARCHAR', false, 5, 'BR');
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, null);
        $this->addColumn('xml', 'Xml', 'CLOB', false, null, null);
        $this->addColumn('name_xml_genere', 'NameXmlGenere', 'VARCHAR', false, 225, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonMesureAvancementTableMap
