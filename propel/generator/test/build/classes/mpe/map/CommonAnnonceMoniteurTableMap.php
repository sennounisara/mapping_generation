<?php



/**
 * This class defines the structure of the 'AnnonceMoniteur' table.
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
class CommonAnnonceMoniteurTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAnnonceMoniteurTableMap';

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
        $this->setName('AnnonceMoniteur');
        $this->setPhpName('CommonAnnonceMoniteur');
        $this->setClassname('CommonAnnonceMoniteur');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 22, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('type_moniteur', 'TypeMoniteur', 'LONGVARCHAR', true, null, null);
        $this->addColumn('statut_xml', 'StatutXml', 'VARCHAR', true, 4, '0');
        $this->addColumn('date_creation', 'DateCreation', 'DATE', true, null, '0000-00-00');
        $this->addColumn('statut_web', 'StatutWeb', 'CHAR', true, null, '0');
        $this->getColumn('statut_web', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
  4 => '4',
  5 => '5',
));
        $this->addColumn('statut_arg', 'StatutArg', 'CHAR', true, null, '0');
        $this->getColumn('statut_arg', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
  4 => '4',
  5 => '5',
));
        $this->addColumn('statut_usn', 'StatutUsn', 'CHAR', true, null, '0');
        $this->getColumn('statut_usn', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
  4 => '4',
  5 => '5',
));
        $this->addColumn('statut_01i', 'Statut01i', 'CHAR', true, null, '0');
        $this->getColumn('statut_01i', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
  4 => '4',
  5 => '5',
));
        $this->addColumn('datepub', 'Datepub', 'VARCHAR', false, 10, null);
        $this->addColumn('num_annonce', 'NumAnnonce', 'INTEGER', true, null, 0);
        $this->addColumn('message_error', 'MessageError', 'LONGVARCHAR', true, null, null);
        $this->addColumn('timestamp', 'Timestamp', 'BLOB', true, null, null);
        $this->addColumn('nom_timestamp', 'NomTimestamp', 'VARCHAR', true, 100, '');
        $this->addColumn('xml_moniteur', 'XmlMoniteur', 'LONGVARCHAR', true, null, null);
        $this->addColumn('id_annonce_boamp', 'IdAnnonceBoamp', 'INTEGER', true, 22, 0);
        $this->addColumn('date_maj', 'DateMaj', 'VARCHAR', false, 20, '0000-00-00 00:00:00');
        $this->addColumn('id_form_xml', 'IdFormXml', 'INTEGER', true, null, null);
        $this->addColumn('accuse_reception', 'AccuseReception', 'CHAR', true, null, null);
        $this->addColumn('id_destination_form_xml', 'IdDestinationFormXml', 'INTEGER', true, null, null);
        $this->addColumn('statut_destinataire', 'StatutDestinataire', 'VARCHAR', false, 10, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAnnonceMoniteurTableMap
