<?php



/**
 * This class defines the structure of the 'Annonce' table.
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
class CommonAnnonceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonAnnonceTableMap';

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
        $this->setName('Annonce');
        $this->setPhpName('CommonAnnonce');
        $this->setClassname('CommonAnnonce');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_boamp', 'IdBoamp', 'INTEGER', true, null, 0);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 100, '');
        $this->addColumn('envoi_boamp', 'EnvoiBoamp', 'INTEGER', true, null, 0);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('datepub', 'Datepub', 'VARCHAR', true, 10, '0000-00-00');
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('nom_fichier_xml', 'NomFichierXml', 'VARCHAR', true, 255, '');
        $this->addColumn('envoi_joue', 'EnvoiJoue', 'CHAR', true, null, '0');
        $this->getColumn('envoi_joue', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('mapa', 'Mapa', 'CHAR', true, null, '0');
        $this->getColumn('mapa', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('implique_SAD', 'ImpliqueSad', 'CHAR', true, null, '0');
        $this->getColumn('implique_SAD', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_maj', 'DateMaj', 'DATE', true, null, '0000-00-00');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonAnnonceTableMap
